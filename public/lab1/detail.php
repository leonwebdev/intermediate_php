<?php

include __DIR__ . '/../../includes/functions.php';

$title = "Detail";

include __DIR__ . '/../../includes/header.inc.php';

?>
<!-- HEADER --------------------------------- -->
<div class="main_wrapper">
    <h1><?= e($title) ?></h1>
    <div class="s-box" style="width: 700px; margin: 0 auto">
        <h1>My Rose blooms this morning</h1>
        <div class="flex-container">

            <div class="label-box" style="margin-right:1em;">
                <div style="padding: 0.1em 0.2em ;border-radius: 0.2em 0 0 0.2em;background:#65ee8e;">Category</div>
                <div style="padding: 0.1em 0.2em ;border-radius: 0 0.2em 0.2em 0;">Rose</div>
            </div>

            <div class="label-box" style="">
                <div style="padding: 0.1em 0.2em ;border-radius: 0.2em 0 0 0.2em;background:#65ee8e;">Event</div>
                <div style="padding: 0.1em 0.2em ;border-radius: 0 0.2em 0.2em 0;"> <a href="#" class="plain_a"
                        style="padding: 0;">View Detail
                        </Details></a></div>
            </div>

        </div>

        <div class="flex-container" style="margin: 1em 0;">

            <div class="">Mary Pink&nbsp;</div>
            <div class="">| 2021-04-13</div>

        </div>
        <div style="margin: 1em 0;">
            <img src="images/rose.jpg" alt="image">
        </div>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad quam
            temporibus voluptas, ipsum dignissimos alias necessitatibus, sed vel ab
            reprehenderit explicabo, earum eum nemo dolores itaque fugit labore totam
            reiciendis.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita fuga
            minima nemo ad nesciunt quisquam exercitationem, voluptates corrupti
            consequatur debitis magnam culpa eius ut quam molestiae sapiente a ex
            dolor.
        </p>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet ad,
            atque nam culpa nihil rerum corporis veritatis unde soluta earum, error
            reiciendis nulla eos corrupti voluptas delectus? Debitis, iure laborum?
        </p>

        <div class="inset-box flex-container" style="height: 10em; color: #666">
            <div style="flex-basis: 70%">Leave a comment...</div>
            <button class="btn" style="
          align-content: flex-end;
          align-self: flex-end;
          margin-bottom: 0em;
          margin-right: 0em;
        ">
                Submit
            </button>
        </div>

        <div class="msg-box" style="min-height: 5em; margin-top: 2em; background: #992bee">
            <div class="msg-box-card" style="background: #fff">
                <p style="margin-top: 0">
                    <span style="color: #ee2bee">#1 Lara Ricky: 2021-Sep-21</span>
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius quo
                    corporis iusto rerum, consectetur maxime saepe explicabo omnis aut
                    repellat quidem, incidunt quis, excepturi nihil sunt pariatur
                    provident quae beatae!
                </p>
                <button class="btn" style="
            margin-bottom: 0em;
            margin-top: 0em;
            margin-right: 0em;
            background: none;
          ">
                    &#128077;
                </button>
                <button class="btn" style="
            margin-bottom: 0em;
            margin-top: 0em;
            margin-right: 0em;
            background: none;
            margin-left: 1em;
          ">
                    &#128078;
                </button>
            </div>
        </div>

        <div class="msg-box" style="min-height: 5em; margin-top: 2em; background: #939774">
            <div class="msg-box-card" style="background: #fff">
                <p style="margin-top: 0">
                    <span style="color: #65ee8e">#2 Tom Riddle: 2021-Oct-15</span>
                </p>
                <p>
                    Lorem ipsum dolor, sit amet it. Eiusis iusto rerum, consectetur maxime
                    saepe m, incidunt quis, excepturi nihil sunt pariatur provident quae
                    beatae!
                </p>
                <button class="btn" style="
            margin-bottom: 0em;
            margin-top: 0em;
            margin-right: 0em;
            background: none;
          ">
                    &#128077;
                </button>
                <button class="btn" style="
            margin-bottom: 0em;
            margin-top: 0em;
            margin-right: 0em;
            background: none;
            margin-left: 1em;
          ">
                    &#128078;
                </button>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER --------------------------------- -->
<?php include __DIR__ . '/../../includes/footer.inc.php'; ?>