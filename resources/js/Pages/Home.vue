<script setup>

</script>

<template>
    <!-- 30. Specific title in Head component -->

    <Head title="Home">
        <!-- 31. head-key in meta -->
        <meta name="description" content="Home information" head-key="description">
    </Head>
    <!-- 12b. It works without the div id app because of @inertia
        <div id="app">
            <p>content</p>
        </div>

        23e. The Layout appears here without calling it : persistant Layout in app.js
     -->
    <div class="aligned">
        <h2>Your decks</h2>
        <a href="" id="btn-newdeck"><img src="../../../public/assets/img/deck/new-deck.png" alt="" class="img-newdeck"></a>
    </div>
    <form class="main_search">
        <input type="text" placeholder="Search">
        <button class="btn-none"><img src="../../../public/assets/img/deck/search-icon.png" alt="search" class="search-icon"></button>
    </form>
    <div class="text-center" id="nodeck">
        <p id="nodeck_text">
            You have no deck yet. <br>
            Build your first deck
        </p>
        <a href=""><img src="../../../public/assets/img/deck/new-deck.png" alt="" class="img-newdeck"></a>
    </div>
    <section id="decks">
        <div class="existing-deck">
            <h3 class="text-center">German</h3>
            <Link href="/list-cards" class="text-center">
                <img src="../../../public/assets/img/deck/edit.png" alt="" class="deck-icon">
            </Link>
            <Link href="" class="text-center">
                <img src="../../../public/assets/img/deck/play.png" alt="" class="deck-icon">
            </Link>
            <Link href="" class="text-center">
                <img src="../../../public/assets/img/deck/delete.png" alt="" class="deck-icon">
            </Link>
        </div>
        <div class="existing-deck">
            <h3 class="text-center">Math</h3>
            <a href="list.html" class="text-center">
                <img src="../../../public/assets/img/deck/edit.png" alt="" class="deck-icon">
            </a>
            <a href="" class="text-center">
                <img src="../../../public/assets/img/deck/play.png" alt="" class="deck-icon">
            </a>
            <a href="" class="text-center">
                <img src="../../../public/assets/img/deck/delete.png" alt="" class="deck-icon">
            </a>
        </div>
        <div class="existing-deck">
            <h3 class="text-center">History</h3>
            <a href="list.html" class="text-center">
                <img src="../../../public/assets/img/deck/edit.png" alt="" class="deck-icon">
            </a>
            <a href="" class="text-center">
                <img src="../../../public/assets/img/deck/play.png" alt="" class="deck-icon">
            </a>
            <a href="" class="text-center">
                <img src="../../../public/assets/img/deck/delete.png" alt="" class="deck-icon">
            </a>
        </div>
        <div class="existing-deck">
            <h3 class="text-center">Chemistry</h3>
            <a href="list.html" class="text-center">
                <img src="../../../public/assets/img/deck/edit.png" alt="" class="deck-icon">
            </a>
            <a href="" class="text-center">
                <img src="../../../public/assets/img/deck/play.png" alt="" class="deck-icon">
            </a>
            <a href="" class="text-center">
                <img src="../../../public/assets/img/deck/delete.png" alt="" class="deck-icon">
            </a>
        </div>
    </section>
</template>