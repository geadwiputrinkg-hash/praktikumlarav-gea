<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Profile']); ?>

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-2xl font-bold mb-4">
            Profile Saya
        </h2>

        <div class="flex flex-col items-center">

            <img
                src="<?php echo e(asset('img/pictayaa.jpg')); ?>"
                alt="Foto Profil"
                class="w-48 h-48 rounded-full object-cover object-top border-4 border-gray-300 shadow-lg">

            <h3 class="mt-4 text-xl font-semibold">
                Gea 
            </h3>

            <p class="text-gray-600">
                Mahasiswa TRPL
            </p>

        </div>

        <div class="mt-6 space-y-2">
            <p><strong>Nama:</strong> Gea Dwi Putri</p>
            <p><strong>Jurusan:</strong> teknologi rekayasa perangkat lunak</p>
            <p><strong>Status:</strong> Mahasiswa</p>
            <p><strong>Mata Kuliah:</strong> Pemrograman Web lanjutan</p>
            <p><strong>Alamat:</strong> Sungailiat</p>
            <p><strong>Hobi:</strong> menonton dan memasak</p>
        </div>

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
<?php endif; ?><?php /**PATH C:\laragon\www\tugasgea\resources\views/profil.blade.php ENDPATH**/ ?>