<?php 
include "../backend/config/db.php";


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../output.css" />
        <link rel="stylesheet" href="../styledashboard.css" />
        <title>Document</title>
    </head>

    <body>
        <div class="tabs-container relative">
            <!-- Radio buttons -->
            <input type="radio" name="tab" id="tab1" checked />
            <input type="radio" name="tab" id="tab2" />
            <input type="radio" name="tab" id="tab3" />
            <input type="radio" name="tab" id="tab4" />
            <input type="radio" name="tab" id="tab5" />

            <!-- Tab labels on the left -->
            <div class="tab-labels">
                <label for="tab1">Dashboard</label>
                <label for="tab2">Personnel</label>
                <label for="tab3">Task</label>
                <label for="tab4">Task4</label>
                <label for="tab5">Tas5</label>
            </div>

            <!-- Tab content on the right -->
            <div class="tab-content">
                <div class="flex justify-between items-center border-b pb-5 border-black/50">
                    <div class="flex gap-2 items-center">
                        <img src="" class="w-12 h-12 rounded-full bg-black" alt="" />
                        <div>
                            <div class="text-sm italic">Welcome Back</div>
                            <h1 class="text-2xl font-semibold">DIRECTOR</h1>
                        </div>
                    </div>
                    <div class="flex">
                        <button class="prim-btn">Clock Out</button>
                    </div>
                </div>
                <!-- <div class="h-10 bg-bslack w-full z-90"></div> -->
                <div class="content content1">
                    <div class="mt-10 flex gap-10">
                        <div class="bg-blue-950 text-white w-1/2 min-h-52 rounded-2xl p-10">
                            <h1 class="text-xl font-semibold">Yesterday's Attendance</h1>
                            <div class="ml-3">
                                <ol class="list-decimal list-inside">
                                    <li>lkdlk</li>
                                    <li>lkdlk</li>
                                </ol>
                            </div>
                        </div>
                        <div class="bg-blue-950 text-white w-1/2 min-h-52 rounded-2xl p-10">
                            <h1 class="text-xl">Today's Task</h1>
                            <div class="ml-3">
                                <ol class="list-decimal list-inside">
                                    <li>lkdlk</li>
                                    <li>lkdlk</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 border rounded-2xl px-10 py-5">
                        <h1>Total's Log Data</h1>
                        <div class="ml-10">
                            <table class="w-full">
                                <thead class="bg-blue-950 text-white text-center">
                                    <tr>
                                        <td>S/N</td>
                                        <td>Name</td>
                                        <td>Status</td>
                                        <td>Login Time</td>
                                        <td>LogOut Time</td>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr class="border-b">
                                        <td>1</td>
                                        <td>Brandon</td>
                                        <td>Intern</td>
                                        <td>8:00</td>
                                        <td>14:00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="content content2">
                    <div>
                        <h1>Register New Personnel</h1>
                        <form method="post" action="../backend/users/create.php"
                            class="w-1/2 mx-auto border p-5 flex flex-col gap-2">
                            <div>
                                <label class="text-sm" for="name">Name:</label>
                                <input class="inputfield" id="name" type="text" />
                            </div>
                            <div>
                                <label class="text-sm" for="email">Email:</label>
                                <input class="inputfield" id="email" type="email" />
                            </div>
                            <div>
                                <label for="cat">Category</label>
                                <select id="cat" class="inputfield" required name="category" id="">
                                    <option value="intern">Intern</option>
                                    <option value="employee">Employee</option>
                                </select>
                            </div>
                            <div>
                                <label for="pwd">Password</label>
                                <input name="password" type="text" id="pwd" class="inputfield" />
                            </div>

                            <button type="submit" class="prim-btn">ADD PERSONNEL</button>
                        </form>
                    </div>
                    <div>
                        <h1 class="text-3xl mt-4 text-blue-950">personnel Info</h1>
                        <div class="w-full flex justify-between gap-10 mt-10 mx-auto">
                            <div class="w-full">
                                <table class="w-full text-center">
                                    <h1>INTERNS</h1>


                                    <thead>
                                        <tr class="bg-blue-950 text-white">
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <!-- <th>Category</th> -->
                                            <th>Email</th>
                                            <th>Action</th>
                                            <!-- <th>Completed tasks</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                  $result = $conn->query("SELECT * from users where category='intern'");
while($row=$result->fetch_assoc()){
  
  echo" <tr class='border-b'>
                      <td>{$row['id']}</td>
                      <td>{$row['name']}</td>
                      
                      <td>{$row['email']}</td>
                      <td class='hover:text-red-500 cursor-pointer'>X</td>
                    </tr> ";
  
  } ?>

                                        <!-- <tr>
                                            <td>2</td>
                                            <td>12/13/2021</td>
                                            <td>9:00 AM</td>
                                            <td>1:00 PM</td>
                                            <td>3 hours</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>12/14/2021</td>
                                            <td>8:00 AM</td>
                                            <td>4:00 PM</td>
                                            <td>6 hours</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="w-full">
                                <h1>EMPLOYEES</h1>
                                <table class="w-full text-center">
                                    <thead>
                                        <tr class="bg-blue-950 text-white">
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>password</th>
                                            <th>Action</th>
                                            <!-- <th>Completed tasks</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                  $result = $conn->query("SELECT * from users where category='employee'");
while($row=$result->fetch_assoc()){
  
  echo" <tr class='border-b'>
                      <td>{$row['id']}</td>
                      <td>{$row['name']}</td>
                      
                      <td>{$row['email']}</td>
                      <td class='hover:text-red-500 cursor-pointer'>X</td>
                    </tr> ";
  
  } ?>
                                        <!-- <tr>
                                            <td>2</td>
                                            <td>12/13/2021</td>
                                            <td>9:00 AM</td>
                                            <td>1:00 PM</td>
                                            <td>3 hours</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>12/14/2021</td>
                                            <td>8:00 AM</td>
                                            <td>4:00 PM</td>
                                            <td>6 hours</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content content3">
                    <h2 class="text-2xl mt-6 text-blue-950">Assign New task</h2>
                    <div>
                        <form method="POST" action="../backend/tasks/create.php"
                            class="w-1/2 mx-auto border p-5 flex flex-col">
                            <div>
                                <label class="text-sm" for="">Task Title:</label>
                                <input class="inputfield" type="text" name="title" />
                            </div>
                            <div>
                                <label for="client">CLeint</label>
                                <input class="inputfield" type="text" id="client" name="client" />
                            </div>
                            <div>
                                <label for="">Assigned to</label>
                                <!-- <select class="inputfield" name="" id="">
                  <option value="brandon">Brandon</option>
                  <option value="brandon">Brandon</option>
                  <option value="brandon">Brandon</option>
                  <option value="brandon">Brandon</option>
                </select> -->
                                <input type="text" name="user_id" class="inputfield" />
                            </div>
                            <div>
                                <label for="taskdetails"> Task details </label>
                                <textarea name="description" id="taskdetails" class="inputfield" rows="10"></textarea>
                            </div>
                            <div>
                                <label for="date">Assigned date</label>
                                <input type="date" name="date" />
                            </div>
                            <div>
                                <label for="dueDate">Due Date:</label>
                                <input type="date" name="due_date" id="dueDate" />
                            </div>
                            <button type="submit" class="prim-btn">ASSIGN</button>
                        </form>
                    </div>
                    <div class="border-t pt-10 mt-10">
                        <h1>Existing tasks</h1>
                        <table class="border">
                            <thead class="bg-blue-950 text-center text-white">
                                <tr>
                                    <td>S/N</td>
                                    <td>Task title</td>
                                    <td class="">Description</td>
                                    <td>Cliet</td>
                                    <td>Assigned to</td>
                                    <td>Date</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td>1</td>
                                    <td>Design Login page with html and css</td>
                                    <td class="">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                                        recusandae ipsum atque, laboriosam tempore voluptatibenetur
                                        officiis ratione deleniti blanditiis non ipsa, temporibus
                                        rem maxime odit quibusdam dolorum nemo iusto perspiciatis.
                                        Repudiandae eum facere fugit, eaque harum explicabo eos
                                        aliquid excepturi provident architecto error vitae!
                                    </td>
                                    <td>Digital Sphere</td>
                                    <td>Brandon</td>
                                    <td>12/4/2025</td>
                                    <td>pending</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>fffffffffffffffffffffffffffff</td>
                                    <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                                        recusandae ipsum atque, laboriosam tempore voluptatibus
                                        tenetur officiis ratione deleniti blanditiis non ipsa,
                                        temporibus rem maxime odit quibusdam dolorum nemo iusto
                                        perspiciatis. Repudiandae eum facere fugit, eaque harum
                                        explicabo eos aliquid excepturi provident architecto error
                                        vitae!
                                    </td>
                                    <td>Digital Sphere</td>
                                    <td>Brandon</td>
                                    <td>12/4/2025</td>
                                    <td>complete</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="content content4">
                    <h2>Tab 4 Content</h2>
                    <p>This is content for Tab 3.</p>
                </div>
                <div class="content content5">
                    <h2>Tab 5 Content</h2>
                    <p>This is content for Tab 3.</p>
                </div>
            </div>
        </div>
    </body>

</html>