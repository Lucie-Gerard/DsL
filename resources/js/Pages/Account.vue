<script setup>

</script>

<template>
    <!-- 30. Specific title in Head component -->

    <Head title="Account">
        <!-- 31. head-key in meta -->
        <meta name="description" content="Shared decks information" head-key="description">
    </Head>

    <h2 class="h2-margin">Your account</h2>

    <p>
        You can change your information here
    </p>

    <form action="" method="post" class="main_form-account">
        <div>
            <label id="username">New username</label>
            <input type="text" name="username" id="username">

            <label id="email">New email address</label>
            <input type="email" name="email" id="email">

            <label id="old_password">Old password</label>
            <input type="password" name="old_password" id="old_password">

            <label id="new_password">New password</label>
            <input type="password" name="new_password" id="new_password">
        </div>
        <button type="submit" formaction="" id="btn_modify-account">
            Modify
        </button>
    </form>
</template>