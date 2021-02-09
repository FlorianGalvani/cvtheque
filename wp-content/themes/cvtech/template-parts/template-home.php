<?php
/*
Template Name: Home
*/


get_header(); ?>



<div id="ex1" class="modal">
  <p>Thanks for clicking. That felt good.</p>
  <a href="#" rel="modal:close">Close</a>
</div>

<!-- Link to open the modal -->
<p><a href="#ex1" rel="modal:open">Open Modal</a></p>


<script>

$("#ex1").modal({
  fadeDuration: 100
});
</script>

<?php get_footer();