<header>
    <nav>
        <p>
            <a href="<?php echo $this->data['nav_urls']['mainpage']['href'] ?>">
                <?php $this->text('sitename') ?>
            </a>
        </p>
        <form action="<?php echo $this->get('wgScript') ?>" method="get" role="search">
            <?php echo $this->makeSearchInput(['id' => 'searchInput']) ?>
            <input type="submit" name="go" value="Go" />
        </form>
    </nav>
    <h1><?php echo $this->get('title') ?></h1>
</header>

<article>

    <?php if ($this->data['subtitle']): ?>
    <p class="subtitle">
        <?php echo $this->get('subtitle') ?>
    </p>
    <?php endif ?>

    <?php
    $this->html('bodycontent');

    echo Html::rawElement(
        'div', array('class' => 'printfooter'), $this->get('printfooter')
    );
    $this->html('catlinks');
    $this->html('dataAfterContent');
    ?>
</article>

<footer>
    <ul>

        <?php if (isset($this->data['content_navigation']['views']['edit'])): ?>
        <li>
            <a href="<?php echo $this->data['content_navigation']['views']['edit']['href'] ?>">
                Edit this page
            </a>
        </li>
        <?php endif ?>

        <?php if (isset($this->data['personal_urls']['login'])): ?>
        <li>
            <a href="<?php echo $this->data['personal_urls']['login']['href'] ?>">
                Log in
            </a>
        </li>
        <?php endif ?>

        <?php if (isset($this->data['personal_urls']['logout'])): ?>
        <li>
            <a href="<?php echo $this->data['personal_urls']['logout']['href'] ?>">
                Log out
            </a>
        </li>
        <?php endif ?>

    </ul>
</footer>

<?php //echo '<pre>'.print_r($this->data, true),'</pre>' ?>

<?php $this->printTrail() ?>
</body>
</html>

