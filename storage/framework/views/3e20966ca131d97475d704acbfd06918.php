<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Reports']); ?>

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-2xl font-bold mb-4">
            Reports
        </h2>

        <table class="table-auto border-collapse border border-gray-300 w-full">

            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">No</th>
                    <th class="border p-2">Nama Laporan</th>
                    <th class="border p-2">Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="border p-2">1</td>
                    <td class="border p-2">Praktikum Laravel</td>
                    <td class="border p-2">Selesai</td>
                </tr>

                <tr>
                    <td class="border p-2">2</td>
                    <td class="border p-2">Praktikum PHP</td>
                    <td class="border p-2">Selesai</td>
                </tr>

                <tr>
                    <td class="border p-2">3</td>
                    <td class="border p-2">Praktikum Web</td>
                    <td class="border p-2">Proses</td>
                </tr>
            </tbody>

        </table>

    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\tugasgea\resources\views/reports.blade.php ENDPATH**/ ?>