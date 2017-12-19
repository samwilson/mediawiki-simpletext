<header>
    <nav>
        <p id="sitename">
            <a href="<?php echo $this->data['nav_urls']['mainpage']['href'] ?>">
                <?php $this->text('sitename') ?>
            </a>
        </p>
        <form action="<?php echo $this->get('wgScript') ?>" method="get" role="search" id="searchform">
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
        <?php
        $links = array_merge(
            $this->get('content_actions'),
            $this->getToolbox(),
            $this->getNavUrls(),
            $this->getPersonalTools()
        );
        foreach ($links as $url => $urlDetails) {
            if ( is_array( $urlDetails ) ) echo $this->makeListItem( $url, $urlDetails );
        }
        ?>
    </ul>
</footer>

<?php $this->printTrail() ?>
</body>
</html>

