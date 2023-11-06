<script setup>
// 28. Import the NavLink page to make the Link component work (it wraps NavLink)
import NavLink from './NavLink.vue';

</script>

<template>
    <!-- 18b. the Nav -->
    <nav class="text-center header_nav sticky">
        <ul class="nav_links">
            <!-- 29. Replace the anchor tag with NavLink -->
            <!-- 30. Is active if the page component is that page -->
            <li>
                <NavLink href="/shared" :active="$page.component === 'Shared'">
                    Shared decks
                </NavLink>
            </li>

            <li>
                <NavLink href="/account" :active="$page.component === 'Account'">
                    Account
                </NavLink>
            </li>

            <li>
                <NavLink href="/donation" :active="$page.component === 'Donation'">
                    Donation
                </NavLink>
            </li>

            <li>
                <NavLink href="/logout">
                    <img src="./assets/img/nav/disconnect.png" alt="disconnect" id="disconnect-btn">
                </NavLink>
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