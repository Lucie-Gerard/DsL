<script setup>

</script>

<template>
    <!-- 18b. the Nav -->
    <nav class="text-center header_nav sticky">
        <h1 class="header_logo text-center">
            <Link href="/"><img src="./assets/img/nav/logo.png" alt="Logo"></Link>
        </h1>
        
        <ul class="nav_links">
            <!-- 25. Replace a tag with Link -->
            <!-- 26. :class is a conditional class. Get the class "active" if that page url -->
            <li>
                <Link href="/shared" :class="{'active' : $page.url.startsWith('/shared')}">
                    Shared decks
                </Link>
            </li>

            <li>
                <Link href="/account" :class="{'active' : $page.url.startsWith('/account')}">
                    Account
                </Link>
            </li>

            <li>
                <Link href="/donation" :class="{'active' : $page.url.startsWith('/donation')}">
                    Donation
                </Link>
            </li>

            <li>
                <Link href="/logout">
                    <img src="./assets/img/nav/disconnect.png" alt="disconnect" id="disconnect-btn">
                </Link>
            </li>

            <ul class="dropdown_menu">
                <li class="dropdown_content isActive"><a href=""><img src="./assets/img/nav/nav_en.png" alt="English"
                            class="language-icon"></a></li>
                <li class="dropdown_content"><a href=""><img src="./assets/img/nav/nav_fr.png" alt="Francais"
                            class="language-icon"></a></li>
                <li class="dropdown_content"><a href=""><img src="./assets/img/nav/nav_de.png" alt="Deutsch"
                            class="language-icon"></a></li>
            </ul>
        </ul>
    </nav>
</template>