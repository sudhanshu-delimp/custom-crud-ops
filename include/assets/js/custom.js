jQuery(document).ready(function () {
  jQuery("#example").DataTable();
});

jQuery(function () {
  jQuery("#celebrity_birth_date,#movie_release_date,#show_release_date").datepicker({
    dateFormat: "yy-mm-dd"
  });
});
