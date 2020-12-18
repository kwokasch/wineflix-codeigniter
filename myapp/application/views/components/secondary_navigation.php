<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<script>
    const SecondaryNavigation = {
        name: "SecondaryNavigation",
        props: {
            user: String,
        },
        template: `
        <section class="secondary-navigation">
          <user-avatar :letter="user" />
        </section>
    `
    }
</script>
