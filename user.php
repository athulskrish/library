<?php
    include('admin_nav.php');
?>
<div class="admin_main">

    <h2 id="red_center">Add user</h2>

    <div class="add_user">

        <form action="" method="GET">
            <table>
                <tr>
                    <td>
                        Name : 
                    </td>
                    <td>
                        <input type="text" name="u_name" placeholder="Name">
                    </td>
                </tr>
                <tr>
                    <td>
                        Type :
                    </td>
                    <td>
                        <select name="u_type">
                            <option value="">Select</option>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </td>
                </tr>
               
                <!-- data for user student and teacher entered differently-->

                <!-- student data -->
                        <tr>
                            <td>
                                Degree :
                            </td>
                            <td>
                                <select name="degree" id="">
                                    <option value="">Select</option>
                                    <option value="">BCA</option>
                                    <option value="">BBA</option>
                                    <option value="">BCOM</option>
                                    <option value="">MCA</option>
                                    <option value="">MCOM</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                 Semester :
                            </td>
                            <td>
                                <input type="text" name="semester" id="" placeholder="Semester">
                            </td>
                          
                        </tr>

                        <tr>
                            <td>
                                Roll no :
                            </td>
                            <td>
                                <input type="text" name="roll_no" id="" placeholder="Roll no">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Address :
                             </td>

                             <td>
                                 <input type="text" name="address" placeholder="Address" id="" style="padding: 30px 20px;">
                             </td>
                        </tr>

                        <tr>
                            <td>
                                Phone number :
                            </td>
                            <td>
                                <input type="text" placeholder="Phone number" name="" id="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Email* : 
                            </td>
                            <td>
                                <input type="text" placeholder="Email" name="" id="">
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

