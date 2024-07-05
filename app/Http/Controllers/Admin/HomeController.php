<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Ticket;
use Carbon\Carbon;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dashboard_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // Use caching to store the results of expensive queries
        $totalTickets = Cache::remember('total_tickets', 60, function () {
            return Ticket::count();
        });

        $openTickets = Cache::remember('open_tickets', 60, function () {
            return Ticket::whereHas('status', function ($query) {
                $query->where('name', 'Open');
            })->count();
        });

        $closedTickets = Cache::remember('closed_tickets', 60, function () {
            return Ticket::whereHas('status', function ($query) {
                $query->where('name', 'Closed');
            })->count();
        });

        // Group tickets by month of creation
        $ticketsByMonth = Cache::remember('tickets_by_month', 60, function () {
            return Ticket::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count')
                ->groupBy('year', 'month')
                ->orderBy('year', 'asc')
                ->orderBy('month', 'asc')
                ->get();
        });

        // Group tickets by day of creation
        $ticketsByDay = Cache::remember('tickets_by_day', 60, function () {
            return Ticket::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, DAY(created_at) as day, COUNT(*) as count')
                ->groupBy('year', 'month', 'day')
                ->orderBy('year', 'asc')
                ->orderBy('month', 'asc')
                ->orderBy('day', 'asc')
                ->get();
        });

        // Fetch categories and count tickets per category
        $categories = Cache::remember('categories', 60, function () {
            return Category::all();
        });

        $ticketCountsByCategory = Cache::remember('ticket_counts_by_category', 60, function () use ($categories) {
            $counts = [];
            foreach ($categories as $category) {
                $counts[$category->name] = Ticket::where('category_id', $category->id)->count();
            }
            return $counts;
        });

        return view('home', compact('totalTickets', 'openTickets', 'closedTickets', 'ticketsByMonth', 'ticketsByDay', 'ticketCountsByCategory'));
    }
}

var_dump(HomeController::class, 'index');
