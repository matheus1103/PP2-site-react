
<?php $__currentLoopData = $parameters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $parameter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($name === '[]'): ?>
        <p>
            Body: <code><?php echo e($parameter['type']); ?></code> <?php echo Parsedown::instance()->text($parameter['description'] ?? ''); ?>

        </p>
        <?php $__currentLoopData = $parameter['__fields']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subfieldName => $subfield): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($subfield['__fields'])): ?>
                    <?php $__env->startComponent('scribe::components.body-parameters', ['parameters' => [$subfieldName => $subfield], 'endpointId' => $endpointId,]); ?>
                    <?php if (isset($__componentOriginalb43036a1322e744ae294c083663901316ee4e16e)): ?>
<?php $component = $__componentOriginalb43036a1322e744ae294c083663901316ee4e16e; ?>
<?php unset($__componentOriginalb43036a1322e744ae294c083663901316ee4e16e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                <?php else: ?>
                    <p>
                        <?php $__env->startComponent('scribe::components.field-details', [
                          'name' => $subfield['name'],
                          'type' => $subfield['type'] ?? 'string',
                          'required' => $subfield['required'] ?? false,
                          'description' => $subfield['description'] ?? '',
                          'endpointId' => $endpointId,
                          'hasChildren' => false,
                          'component' => 'body',
                        ]); ?>
                        <?php if (isset($__componentOriginal673c41eaf58f2b5c66b5a2c7fb01bca581a21e5e)): ?>
<?php $component = $__componentOriginal673c41eaf58f2b5c66b5a2c7fb01bca581a21e5e; ?>
<?php unset($__componentOriginal673c41eaf58f2b5c66b5a2c7fb01bca581a21e5e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                    </p>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php elseif(!empty($parameter['__fields'])): ?>
        <p>
        <details>
            <summary style="padding-bottom: 10px;">
                <?php $__env->startComponent('scribe::components.field-details', [
                  'name' => $parameter['name'],
                  'type' => $parameter['type'] ?? 'string',
                  'required' => $parameter['required'] ?? false,
                  'description' => $parameter['description'] ?? '',
                  'endpointId' => $endpointId,
                  'hasChildren' => true,
                  'component' => 'body',
                ]); ?>
                <?php if (isset($__componentOriginal673c41eaf58f2b5c66b5a2c7fb01bca581a21e5e)): ?>
<?php $component = $__componentOriginal673c41eaf58f2b5c66b5a2c7fb01bca581a21e5e; ?>
<?php unset($__componentOriginal673c41eaf58f2b5c66b5a2c7fb01bca581a21e5e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
            </summary>
            <?php $__currentLoopData = $parameter['__fields']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subfieldName => $subfield): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($subfield['__fields'])): ?>
                    <?php $__env->startComponent('scribe::components.body-parameters', ['parameters' => [$subfieldName => $subfield], 'endpointId' => $endpointId,]); ?>
                    <?php if (isset($__componentOriginalb43036a1322e744ae294c083663901316ee4e16e)): ?>
<?php $component = $__componentOriginalb43036a1322e744ae294c083663901316ee4e16e; ?>
<?php unset($__componentOriginalb43036a1322e744ae294c083663901316ee4e16e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                <?php else: ?>
                    <p>
                        <?php $__env->startComponent('scribe::components.field-details', [
                          'name' => $subfield['name'],
                          'type' => $subfield['type'] ?? 'string',
                          'required' => $subfield['required'] ?? false,
                          'description' => $subfield['description'] ?? '',
                          'endpointId' => $endpointId,
                          'hasChildren' => false,
                          'component' => 'body',
                        ]); ?>
                        <?php if (isset($__componentOriginal673c41eaf58f2b5c66b5a2c7fb01bca581a21e5e)): ?>
<?php $component = $__componentOriginal673c41eaf58f2b5c66b5a2c7fb01bca581a21e5e; ?>
<?php unset($__componentOriginal673c41eaf58f2b5c66b5a2c7fb01bca581a21e5e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                    </p>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </details>
        </p>
    <?php else: ?>
        <p>
            <?php $__env->startComponent('scribe::components.field-details', [
              'name' => $parameter['name'],
              'type' => $parameter['type'] ?? 'string',
              'required' => $parameter['required'] ?? false,
              'description' => $parameter['description'] ?? '',
              'endpointId' => $endpointId,
              'hasChildren' => false,
              'component' => 'body',
            ]); ?>
            <?php if (isset($__componentOriginal673c41eaf58f2b5c66b5a2c7fb01bca581a21e5e)): ?>
<?php $component = $__componentOriginal673c41eaf58f2b5c66b5a2c7fb01bca581a21e5e; ?>
<?php unset($__componentOriginal673c41eaf58f2b5c66b5a2c7fb01bca581a21e5e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
        </p>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH /var/www/vendor/knuckleswtf/scribe/src/../resources/views//components/body-parameters.blade.php ENDPATH**/ ?>