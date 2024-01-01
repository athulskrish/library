<?php
include("navbar.php")
?>
<!--  Books photos  -->
<br>
<h3 id="rent">Top Suggestions</h3>
<div class="container">
     <div class= "col">
        <a href="#">
            <img src="images/one_indian_girl.jpeg" alt="books" width="150px" height="250px">
        </a>
        </div>
<div class="col">
        <a href="#">
        <img src="images/room_105.jpeg" alt="books" width="150px" height="250px">
        </a>
    </div>
<div class="col">
    
    <a href="#">
    <img src="images/half_girlfriend.jpeg" alt="books" width="150px" height="250px">
    </a>
    </div>
<div class="col">
    <a href="#">
    <img src="images/3_mistakes.jpeg" alt="books" width="150px" height="250px">
    </a>
</div>
</div>

<!-- Books Photo-->

<!-- rent --><div id="renting">
    <h3 id="rent">Rent a book</h3>
    </div>
    <form action="" method="get" class="rent">
    <table id="">   
    <tr>
            <td>
    <label for="b_name">Enter the book name : </label>
    </td>
    <td> <input type="text" name="b_name" placeholder="bookname"><br></td>
    </tr>
    <tr>
    <td><label for="b_author">Enter the author name (Optional) :</label></td>
    <td><input type="text" name="b_author" placeholder="author"><br></td>
    </tr>
    <tr>
    <td> <label for="b_keep">Return book after :</label></td>
    <td><select name="b_keep">
         <option>select</option>
         <option >7 days</option>
         <option >14 days</option>
         <option>21 days</option>

     </select></td>
    </tr></table>
     <br>
     <br>
        <div class="submit_holder">
     <input type="submit" name="Submit" value="Submit" id="login" >
        </div>
    </form>
   
<!-- rent -->
<br>


<!-- Books in custody -->
<div id="booking">
<h3 id="rent">Books Rented</h3>
</div>
<div class="container">
     <div class= "col">
        <a href="#">
            <img src="images/prisoner.jpeg  " alt="books" width="150px" height="250px">
        </a>
        </div>
<div class="col">
        <a href="#">
        <img src="images/deadly_hallows.jpeg" alt="books" width="150px" height="250px">
        </a>
    </div>
<div class="col">
    
    <a href="#">
    <img src="images/order_of_phoenix.jpeg" alt="books" width="150px" height="250px">
    </a>
    </div>
<div class="col">
    <a href="#">
    <img src="images/chamber_of_secrets.jpeg" alt="books" width="150px" height="250px">
    </a>
</div>
</div>



<!-- END Books in custody -->

<!--  Fine -->
<div id="fine">
    <h3 id="rent">Fine</h3>
</div>
<form action="" method="get" >
   <label for="b_fine"> Fine to be paid </label>
   <br> <br>
   <div class="submit_holder">
     <input type="submit" name="Pay" value="Pay" id="pay" >
        </div>
</form>




<!--  END Fine -->




<?php
include('footer.php')
?>


