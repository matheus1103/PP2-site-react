<?php
    use Knuckles\Scribe\Tools\WritingUtils as u;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $metadata['title']; ?></title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $assetPathPrefix; ?>css/theme-default.style.css" media="screen">
    <link rel="stylesheet" href="<?php echo $assetPathPrefix; ?>css/theme-default.print.css" media="print">
    <script src="<?php echo e(u::getVersionedAsset($assetPathPrefix.'js/theme-default.js')); ?>"></script>

    <link rel="stylesheet"
          href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

<?php if($tryItOut['enabled'] ?? true): ?>
    <script src="//cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
    <script>
        var baseUrl = "<?php echo e($tryItOut['base_url'] ?? config('app.url')); ?>";
    </script>
    <script src="<?php echo e(u::getVersionedAsset($assetPathPrefix.'js/tryitout.js')); ?>"></script>
<?php endif; ?>

</head>

<body data-languages="<?php echo e(json_encode($metadata['example_languages'] ?? [])); ?>">
<a href="#" id="nav-button">
      <span>
        MENU
        <img src="<?php echo $assetPathPrefix; ?>images/navbar.png" alt="navbar-image" />
      </span>
</a>
<div class="tocify-wrapper">
    <?php if($metadata['logo'] != false): ?>
    <img src="<?php echo e($metadata['logo']); ?>" alt="logo" class="logo" style="padding-top: 10px;" width="230px"/>
    <?php endif; ?>
    <?php if(isset($metadata['example_languages'])): ?>
        <div class="lang-selector">
            <?php $__currentLoopData = $metadata['example_languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#" data-language-name="<?php echo e($lang); ?>"><?php echo e($lang); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

    <?php if(isset($metadata['links'])): ?>
        <ul class="toc-footer" id="toc-footer">
            <?php $__currentLoopData = $metadata['links']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo $link; ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
        <ul class="toc-footer" id="last-updated">
            <li>Last updated: <?php echo e($metadata['last_updated']); ?></li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <?php echo $intro; ?>


        <?php echo $auth; ?>


        <?php echo $__env->make("scribe::themes.default.groups", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $append; ?>

    </div>
    <div class="dark-box">
        <?php if(isset($metadata['example_languages'])): ?>
            <div class="lang-selector">
                <?php $__currentLoopData = $metadata['example_languages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#" data-language-name="<?php echo e($lang); ?>"><?php echo e($lang); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php if(isset($metadata['example_languages'])): ?>
<script>
    $(function () {
        var exampleLanguages = <?php echo json_encode($metadata['example_languages'], 15, 512) ?>;
        setupLanguages(exampleLanguages);
    });
</script>
<?php endif; ?>
</body>
</html><?php /**PATH /var/www/vendor/knuckleswtf/scribe/src/../resources/views//themes/default/index.blade.php ENDPATH**/ ?>