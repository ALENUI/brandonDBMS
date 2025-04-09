<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./output.css" />
    <link rel="stylesheet" href="./styledashboard.css" />
    <title>dashboard</title>
  </head>
  <body>
    <div class="tabs-container">
      <!-- Radio buttons -->
      <input type="radio" name="tab" id="tab1" checked />
      <input type="radio" name="tab" id="tab2" />
      <input type="radio" name="tab" id="tab3" />

      <!-- Tab labels on the left -->
      <div class="tab-labels">
        <label for="tab1">Dashboard</label>
        <label for="tab2">Tab 2</label>
        <label for="tab3">Tab 3</label>
      </div>

      <!-- Tab content on the right -->
      <div class="tab-content">
        <div
          class="flex justify-between items-center border-b pb-5 border-black/50"
        >
          <div class="flex gap-2 items-center">
            <img src="" class="w-12 h-12 rounded-full bg-black" alt="" />
            <div>
              <div class="text-sm italic">Welcome Back</div>
              <h1 class="text-2xl font-semibold">Brandon</h1>
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
              <h1 class="text-xl font-semibold">Yesterday's Task</h1>
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
            <h1>completed task</h1>
            <div class="ml-10">
              <div>
                <input type="checkbox" id="task1" />
                <label for="task1">kjsksdjk</label>
              </div>
              <div>
                <input type="checkbox" id="task1" />
                <label for="task1">kjsksdjk</label>
              </div>
              <div>
                <input type="checkbox" id="task1" />
                <label for="task1">kjsksdjk</label>
              </div>
              <div>
                <input type="checkbox" id="task1" />
                <label for="task1">kjsksdjk</label>
              </div>
            </div>
          </div>
        </div>
        <div class="content content2">
          <div class="border w-[65%] mt-10 mx-auto">
            <table class="w-full text-center">
              <thead>
                <tr class="bg-blue-950 text-white">
                  <th>S/N</th>
                  <th>Date</th>
                  <th>Clock In</th>
                  <th>Clock Out</th>
                  <th>Total Hours</th>
                  <th>Completed tasks</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b">
                  <td>1</td>
                  <td>12/12/2021</td>
                  <td>10:00 AM</td>
                  <td>12:00 PM</td>
                  <td>2 hours</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>12/13/2021</td>
                  <td>9:00 AM</td>
                  <td>1:00 PM</td>
                  <td>3 hours</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>12/14/2021</td>
                  <td>8:00 AM</td>
                  <td>4:00 PM</td>
                  <td>6 hours</td>
                  <td>3</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="content content3">
          <h2>Tab 3 Content</h2>
          <p>This is content for Tab 3.</p>
        </div>
      </div>
    </div>
  </body>
</html>
