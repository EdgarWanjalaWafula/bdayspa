<?php require_once "nav.php" ?>

<!-- Body content -->
<section>
		<div class="uk-cover-container">
		    <div uk-slideshow="animation:push">
                <div class="uk-position-relative uk-visible-toggle uk-light">

                    <ul class="uk-slideshow-items">
                        <li>
                            <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                                <img src="assets/images/africa-animals-black-and-white-3158.jpg" alt="" uk-cover>
                            </div>
                            <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; background-color: #000,#000"></div>
                            <div class="uk-position-center uk-position-medium uk-text-center">
                                <div uk-slideshow-parallax="scale: 1,1,0.8">
                                    <h1 class="uk-heading-primary" uk-slideshow-parallax="x: 200,0,0">Heading</h1>
                                    <p class="uk-text-lead" uk-slideshow-parallax="x: 400,0,0;">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                                <img src="assets/images/africa-animal-animals-417142.jpg" alt="" uk-cover>
                            </div>
                            <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; background-color: #000,#000"></div>
                            <div class="uk-position-center uk-position-medium uk-text-center">
                                <div uk-slideshow-parallax="scale: 1,1,0.8">
                                    <h1 class="uk-heading-primary" uk-slideshow-parallax="x: 200,0,0">Heading</h1>
                                    <p class="uk-text-lead" uk-slideshow-parallax="x: 400,0,0;">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                                <img src="assets/images/africa-animals-conservation-247376.jpg" alt="" uk-cover>
                            </div>
                            <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; background-color: #000,#000"></div>
                            <div class="uk-position-center uk-position-medium uk-text-center">
                                <div uk-slideshow-parallax="scale: 1,1,0.8">
                                    <h1 class="uk-heading-primary" uk-slideshow-parallax="x: 200,0,0">Heading</h1>
                                    <p class="uk-text-lead" uk-slideshow-parallax="x: 400,0,0;">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                                <img src="assets/images/africa-animal-elephant-46507.jpg" alt="" uk-cover>
                            </div>
                            <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; background-color: #000,#000"></div>
                            <div class="uk-position-center uk-position-medium uk-text-center">
                                <div uk-slideshow-parallax="scale: 1,1,0.8">
                                    <h1 class="uk-heading-primary" uk-slideshow-parallax="x: 200,0,0">Heading</h1>
                                    <p class="uk-text-lead" uk-slideshow-parallax="x: 400,0,0;">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                </div>

                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>
	</div>
</section>

<section>
	<div class="uk-container">
		<ul class="uk-list">
                        <li>List item 1</li>
                        <li>List item 2</li>
                        <li>List item 3</li>
                        <li>List item 4 with some more text wrapping into the next line</li>
                        <li>List item 5
                            <ul>
                                <li>List item 1</li>
                                <li>List item 2
                                    <ul>
                                        <li>List item 1</li>
                                        <li>List item 2</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>List item 6</li>
                    </ul>
	</div>
</section>

<?php require_once "footer.php" ?>