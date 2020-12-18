<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php
    defined('BASEPATH') or exit('No direct script access allowed');
?>
<script>
    const UserAvatar = {
        name: "UserAvatar",
        props: {
            letter: String,
        },
        template: `
      <span class="user-avatar">
        <a href="#">{{ letter }}</a>
      </span>
    `
    }
</script>
