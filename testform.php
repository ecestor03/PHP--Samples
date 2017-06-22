<style>
/* .invalid class prevents CSS from automatically applying */
.invalid input:required:invalid {
  background: #BE4C54;
}
 
/* Mark valid inputs during .invalid state */
.invalid input:required:valid {
  background: #17D654 ;
}

</style>



<form class="validate-form">
  <input type="text"
         title="required input" 
         placeholder="required"
         required /> 
  <input type="text"
         title="Must be 5 numeric numbers"
         placeholder="zip code"
         pattern="\d{5}"
         maxlength="5"
         required />
  <input type="submit" />
</form>

<script>
function hasHtml5Validation () {
 return typeof document.createElement('input').checkValidity === 'function';
}

if (hasHtml5Validation()) {
 $('.validate-form').submit(function (e) {
   if (!this.checkValidity()) {
     // Prevent default stops form from firing
     e.preventDefault();
     $(this).addClass('invalid');
     $('#status').html('invalid');
   } else {
     $(this).removeClass('invalid');
     $('#status').html('submitted');
   }
 });
}
	
	</script>