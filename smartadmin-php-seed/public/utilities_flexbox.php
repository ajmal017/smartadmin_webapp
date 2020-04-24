<?php

require_once 'init.php';

$_title = 'Colors - Utilities - SmartAdmin v4.0.2';
$_active_nav = 'utilities_flexbox';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities.';

?>
<!DOCTYPE html>
<!-- 
Template Name:: SmartAdmin PHP 7 Responsive WebApp - Template built with Bootstrap 4 and PHP 7
Version: 4.0.2
Author: Jovanni Lo
Website: https://smartadmin.lodev09.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-php-7-responsive-webapp-WB05M9585
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
    <?php include_once APP_PATH.'/includes/head.php'; ?>
    <body class="mod-bg-1 ">
        <?php include_once APP_PATH.'/includes/theme.php'; ?>
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <?php include_once APP_PATH.'/includes/nav.php'; ?>
                <div class="page-content-wrapper">
                    <?php include_once APP_PATH.'/includes/header.php'; ?>
                    <!-- BEGIN Page Content -->
                    <!-- the #js-page-content id is needed for some plugins to initialize -->
                    <main id="js-page-content" role="main" class="page-content">
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
                            <li class="breadcrumb-item">Utilities</li>
                            <li class="breadcrumb-item active">Colors</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Flexbox
                                <small>
                                    Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities.
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-warning">
                                    <strong>Heads up!</strong>
                                    <br>
                                    The flexbox behaviours are an adaptation from the core bootstrap 4 CSS system. To learn further about its responsive behaviours please head over to the <a href="https://getbootstrap.com/docs/4.3/utilities/flex/" target="_blank">official documentation for flexbox</a>.
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g">
                                            Enable <span class="fw-300">flex behaviors </span>
                                            <small>
                                                Apply <code>display</code> utilities to create a flexbox container and transform <strong>direct children elements</strong> into flex items. Flex containers and items are able to be modified further with additional flex properties.
                                            </small>
                                        </h4>
                                        <h5 class="frame-heading">
                                            <code>d-flex</code>
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex p-2 bd-highlight">I'm a flexbox container!</div>
                                        </div>
                                        <h5 class="frame-heading">
                                            <code>d-inline-flex</code>
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-inline-flex p-2 bd-highlight">I'm an inline flexbox container!</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g">
                                            Direction
                                            <small>
                                                Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is row. However, you may encounter situations where you needed to explicitly set this value (like responsive layouts).
                                            </small>
                                        </h4>
                                        <h5 class="frame-heading">
                                            Use <code>.flex-row</code> to set a horizontal direction (the browser default), or <code>.flex-row-reverse</code> to start the horizontal direction from the opposite side.
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex flex-row bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">Flex item 1</div>
                                                <div class="p-2 bd-highlight">Flex item 2</div>
                                                <div class="p-2 bd-highlight">Flex item 3</div>
                                            </div>
                                            <div class="d-flex flex-row-reverse bd-highlight">
                                                <div class="p-2 bd-highlight">Flex item 1</div>
                                                <div class="p-2 bd-highlight">Flex item 2</div>
                                                <div class="p-2 bd-highlight">Flex item 3</div>
                                            </div>
                                        </div>
                                        <h5 class="frame-heading">
                                            Use <code>.flex-column</code> to set a vertical direction, or <code>.flex-column-reverse</code> to start the vertical direction from the opposite side.
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex flex-column bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">Flex item 1</div>
                                                <div class="p-2 bd-highlight">Flex item 2</div>
                                                <div class="p-2 bd-highlight">Flex item 3</div>
                                            </div>
                                            <div class="d-flex flex-column-reverse bd-highlight">
                                                <div class="p-2 bd-highlight">Flex item 1</div>
                                                <div class="p-2 bd-highlight">Flex item 2</div>
                                                <div class="p-2 bd-highlight">Flex item 3</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g">
                                            Justify <span class="fw-300">Content</span>
                                            <small>
                                                <code>justify-content</code> utilities on flexbox containers to change the alignment of flex items on the main axis (the x-axis to start, y-axis if <code>flex-direction: column</code>). Choose from <code>start</code> (browser default), <code>end</code>, <code>center</code>, <code>between</code>, or <code>around</code>.
                                            </small>
                                        </h4>
                                        <div class="frame-wrap">
                                            <div class="d-flex justify-content-start bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex justify-content-end bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex justify-content-center bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex justify-content-between bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex justify-content-around bd-highlight">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g">
                                            Align <span class="fw-300">items</span>
                                            <small>
                                                Use <code>align-items</code> utilities on flexbox containers to change the alignment of flex items on the cross axis (the y-axis to start, x-axis if <code>flex-direction: column</code>).
                                            </small>
                                        </h4>
                                        <h5 class="frame-heading">
                                            Choose from <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex align-items-start bd-highlight mb-3" style="height: 100px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex align-items-end bd-highlight mb-3" style="height: 100px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex align-items-center bd-highlight mb-3" style="height: 100px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex align-items-baseline bd-highlight mb-3" style="height: 100px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex align-items-stretch bd-highlight" style="height: 100px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                        <p>Responsive variations also exist for <code>align-items</code>.</p>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g">
                                            Align <span class="fw-300">self</span>
                                            <small>
                                                Use <code>align-self</code> utilities on flexbox items to individually change their alignment on the cross axis (the y-axis to start, x-axis if <code>flex-direction: column</code>).
                                            </small>
                                        </h4>
                                        <h5 class="frame-heading">
                                            Choose from the same options as <code>align-items: start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex bd-highlight mb-3" style="height: 100px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="align-self-start p-2 bd-highlight">Aligned flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex bd-highlight mb-3" style="height: 100px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="align-self-end p-2 bd-highlight">Aligned flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex bd-highlight mb-3" style="height: 100px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="align-self-center p-2 bd-highlight">Aligned flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex bd-highlight mb-3" style="height: 100px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="align-self-baseline p-2 bd-highlight">Aligned flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex bd-highlight" style="height: 100px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="align-self-stretch p-2 bd-highlight">Aligned flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g">
                                            Fill
                                            <small>
                                                Use the <code>.flex-fill</code> class on a series of sibling elements to force them into widths equal to their content (or equal widths if their content does not surpass their border-boxes) while taking up all available horizontal space.
                                            </small>
                                        </h4>
                                        <div class="frame-wrap">
                                            <div class="d-flex bd-highlight">
                                                <div class="p-2 flex-fill bd-highlight">Flex item with a lot of content</div>
                                                <div class="p-2 flex-fill bd-highlight">Flex item</div>
                                                <div class="p-2 flex-fill bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g">
                                            Grow <span class="fw-300">and shrink</span>
                                            <small>
                                                Use <code>.flex-grow-*</code> utilities to toggle a flex item’s ability to grow to fill available space. In the example below, the <code>.flex-grow-1</code> elements uses all available space it can, while allowing the remaining two flex items their necessary space.
                                            </small>
                                        </h4>
                                        <h5 class="frame-heading">
                                            Choose from the same options as <code>align-items: start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex bd-highlight">
                                                <div class="p-2 flex-grow-1 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Third flex item</div>
                                            </div>
                                        </div>
                                        <h5 class="frame-heading">
                                            Use <code>.flex-shrink-*</code> utilities to toggle a flex item’s ability to shrink if necessary. In the example below, the second flex item with .<code>flex-shrink-1</code> is forced to wrap it’s contents to a new line, “shrinking” to allow more space for the previous flex item with <code>.w-100</code>.
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex bd-highlight">
                                                <div class="p-2 w-100 bd-highlight">Flex item</div>
                                                <div class="p-2 flex-shrink-1 bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g">
                                            Auto <span class="fw-300">margins</span>
                                            <small>
                                                Flexbox can do some pretty awesome things when you mix flex alignments with auto margins. Shown below are three examples of controlling flex items via auto margins: default (no auto margin), pushing two items to the right (<code>.mr-auto</code>), and pushing two items to the left (<code>.ml-auto</code>).
                                            </small>
                                        </h4>
                                        <p>
                                            <strong>Unfortunately, IE10 and IE11 do not properly support auto margins on flex items whose parent has a non-default justify-content value.</strong> <a href="https://stackoverflow.com/a/37535548" target="_blank">See this StackOverflow answer</a>.
                                        </p>
                                        <div class="frame-wrap">
                                            <div class="d-flex bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex bd-highlight mb-3">
                                                <div class="mr-auto p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="ml-auto p-2 bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g">
                                            With <span class="fw-300">align-items</span>
                                            <small>
                                                Vertically move one flex item to the top or bottom of a container by mixing align-items, flex-direction: column, and <code>margin-top: auto</code> or <code>margin-bottom: auto</code>.
                                            </small>
                                        </h4>
                                        <h5 class="frame-heading">
                                            Choose from the same options as <code>align-items: start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
                                                <div class="mb-auto p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                            <div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px;">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="mt-auto p-2 bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g">
                                            Wrap
                                            <small>
                                                Change how flex items wrap in a flex container. Choose from no wrapping at all (the browser default) with <code>.flex-nowrap</code>, wrapping with <code>.flex-wrap</code>, or reverse wrapping with <code>.flex-wrap-reverse</code>.
                                            </small>
                                        </h4>
                                        <h5 class="frame-heading">
                                            d-flex flex-nowrap
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex flex-nowrap bd-highlight" style="width: 8rem;">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                        <h5 class="frame-heading">
                                            d-flex flex-wrap
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex flex-wrap bd-highlight">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                        <h5 class="frame-heading">
                                            d-flex flex-wrap-reverse
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex flex-wrap-reverse bd-highlight">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g">
                                            Order
                                            <small>
                                                Change the <em>visual</em> order of specific flex items with a handful of <code>order</code> utilities. We only provide options for making an item first or last, as well as a reset to use the DOM order. As <code>order</code> takes any integer value (e.g., <code>5</code>), add custom CSS for any additional values needed.
                                            </small>
                                        </h4>
                                        <div class="frame-wrap">
                                            <div class="d-flex flex-nowrap bd-highlight">
                                                <div class="order-3 p-2 bd-highlight">First flex item</div>
                                                <div class="order-2 p-2 bd-highlight">Second flex item</div>
                                                <div class="order-1 p-2 bd-highlight">Third flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g">
                                            Align <span class="fw-300">content</span>
                                            <small>
                                                Use <code>align-content</code> utilities on flexbox containers to align flex items <em>together</em> on the cross axis. Choose from <code>start</code> (browser default), <code>end</code>, <code>center</code>, <code>between</code>, <code>around</code>, or <code>stretch</code>. To demonstrate these utilities, we’ve enforced <code>flex-wrap: wrap</code> and increased the number of flex items.
                                            </small>
                                        </h4>
                                        <div class="alert alert-info">
                                            <strong>Heads up!</strong> This property has no effect on single rows of flex items.
                                        </div>
                                        <h5 class="frame-heading">
                                            <code> d-flex align-content-start flex-wrap </code>
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex align-content-start flex-wrap bd-highlight mb-3" style="height: 200px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                        <h5 class="frame-heading">
                                            <code> d-flex align-content-end flex-wrap </code>
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex align-content-center flex-wrap bd-highlight mb-3" style="height: 200px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                        <h5 class="frame-heading">
                                            <code> d-flex align-content-center flex-wrap </code>
                                        </h5>
                                        <div class="frame-wrap">
                                            <div class="d-flex align-content-between flex-wrap bd-highlight mb-3" style="height: 200px">
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                                <div class="p-2 bd-highlight">Flex item</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!-- END Page Content -->
                    <?php include_once APP_PATH.'/includes/footer.php'; ?>
                </div>
            </div>
        </div>
        <!-- END Page Wrapper -->
        <?php include_once APP_PATH.'/includes/extra.php'; ?>
        <?php include_once APP_PATH.'/includes/js.php'; ?>
    </body>
</html>
