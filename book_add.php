<?php
    include('admin_nav.php');

?>

<div class="admin_main">
    <h2 id="red_center">Add Books</h2>
    <div class="book_add">
            <form action="" method="Get">
                <table>
                    <tr>
                        <td>
                            Book name :
                        </td>
                        <td>
                            <input type="text" name="book_name" id="" placeholder="Book name">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Author name :
                        </td>
                        <td>
                            <input type="text" name="author_name" id=""  placeholder="Author name">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Genre :
                        </td>
                        <td>
                            <input type="text" name="genre" id=""  placeholder="Genre">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Description :
                        </td>
                        <td>
                            <input type="text" name="description" id=""  placeholder="Description"  style="padding: 30px 20px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Image :
                        </td>
                        <td>
                            <input type="file" name="image" id="" value="choose image" placeholder="Book Image">
                        </td>
                    </tr>




                    <tr>
                       <td></td>
                       <td>
                           <input type="submit" name="" id="">
                       </td>
                   </tr>



                </table>




            </form>



    </div>



</div>


