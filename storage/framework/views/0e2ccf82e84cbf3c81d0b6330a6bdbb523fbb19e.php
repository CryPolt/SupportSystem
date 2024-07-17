<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Dashboard
                    </div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-3">
                                        <div class="text-value"><?php echo e(number_format($totalTickets)); ?></div>
                                        <div>Total tickets</div>
                                        <br />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card text-white bg-success">
                                    <div class="card-body pb-3">
                                        <div class="text-value"><?php echo e(number_format($openTickets)); ?></div>
                                        <div>Open tickets</div>
                                        <br />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card text-white bg-danger">
                                    <div class="card-body pb-3">
                                        <div class="text-value"><?php echo e(number_format($closedTickets)); ?></div>
                                        <div>Closed tickets</div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add tickets by month section -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Tickets by Month
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Year</th>
                                                <th>Month</th>
                                                <th>Count</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $ticketsByMonth; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($ticket->year); ?></td>
                                                    <td><?php echo e(\Carbon\Carbon::create()->month($ticket->month)->format('F')); ?></td>
                                                    <td><?php echo e($ticket->count); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add tickets by day section -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Tickets by Day
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Year</th>
                                                <th>Month</th>
                                                <th>Day</th>
                                                <th>Count</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $ticketsByDay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($ticket->year); ?></td>
                                                    <td><?php echo e(\Carbon\Carbon::create()->month($ticket->month)->format('F')); ?></td>
                                                    <td><?php echo e($ticket->day); ?></td>
                                                    <td><?php echo e($ticket->count); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add tickets by category chart section -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Tickets by Category (Chart)
                                    </div>
                                    <div class="card-body">
                                        <canvas id="categoryChart" width="400" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data for Chart.js
        let categoryNames = <?php echo json_encode(array_keys($ticketCountsByCategory), 15, 512) ?>;
        let categoryCounts = <?php echo json_encode(array_values($ticketCountsByCategory), 15, 512) ?>;

        // Chart.js configuration
        let ctx = document.getElementById('categoryChart').getContext('2d');
        let categoryChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: categoryNames,
                datasets: [{
                    label: 'Ticket Counts',
                    data: categoryCounts,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        precision: 0,
                        suggestedMin: 0,
                        stepSize: 1 // Устанавливаем шаг оси Y как 1
                    }
                }
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crypolt/PhpstormProjects/SupportSystem/resources/views/home.blade.php ENDPATH**/ ?>