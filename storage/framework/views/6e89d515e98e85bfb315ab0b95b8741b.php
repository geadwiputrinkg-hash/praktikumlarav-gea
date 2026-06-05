<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'About']); ?>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <h2 class="text-xl font-bold mb-3">Tentang Saya</h2>

            <p>Halo warga C, aku Gea</p>
            <p>aku merupakan alumni dari sman 1 bakam yang dulunya bercita cita menjadi seorang tenaga kesehataan,
                namun ternyata mimpi itu harus terkubur dan sekarang aku harus menjalani kehiddupan di jurusan yang tidak pernah
                terlintas dipikiranku "teknologi rekayasa perangkat lunak".
                awalnya berat untukku menerima tapi dengan adanya teman yang selalu mensupport aku menjadi 
                mulai bersemangat, rasanya sangat sulit namun dengan adanya support dan keteguhan dari diriku
                aku yakin aku bisa.
            </p>
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
<?php endif; ?><?php /**PATH C:\laragon\www\tugasgea\resources\views/about.blade.php ENDPATH**/ ?>