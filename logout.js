const logout = document.querySelector("#logout");
logout.addEventListener("click", function(e) {
    Swal.fire({
        icon: 'warning',
        title: 'Do you still want to logout?',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Logout',
        cancelButtonText: 'No',
      }).then((result) => {
        if (result.isConfirmed) {
          location.href = "http://localhost/Guide%20%20Tourist/logout.php";
        }else{
            alertify.set('notifier', 'position', 'top-right');
            alertify.success('Logout canceled');
        }
      });
      
});