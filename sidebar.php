<div class="sidebar">
    <!-- header title -->
    <div class="sidebar-header h-24 flex items-center">
        <h3 class="text-2xl text-blue-600  m-auto font-bold">TDList</h3>
    </div>
    <hr class="border-gray-300">
    <!-- sidebar menu -->
    <div class="sidebar-menu">
        <ul>
            <li class="ml-6 my-6">
                <a href="index.php">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="title hover:text-blue-600 duration-150">Home</span>
                </a>
            </li>
            <li class="ml-6 my-6">
                <a class="cursor-pointer tasks">
                    <span class=" icon"><i class="fas fa-tasks"></i></span>
                    <span class="title hover:text-blue-600 duration-150" id="tasks">Tasks <i class="fas fa-chevron-right"></i></span>
                </a>
                <div class="sub-task hiddens flex flex-col pl-6">
                    <!-- > icon -->
                    <!-- <span><i class="fas fa-chevron-right"></i></span> -->
                    <a class="cursor-pointer hover:underline hover:text-blue-600"> <i class="fas fa-chevron-right"></i>School</a><br>
                    <a class="cursor-pointer hover:underline hover:text-blue-600"><i class="fas fa-chevron-right"></i> work</a><br>
                    <a class="add-task-category cursor-pointer hover:underline hover:text-blue-600"><i class="fas fa-chevron-right"></i> Add new task categoty</a><br>
                </div>
            </li>
            <li class="ml-6 my-6">
                <a href="index.php">
                    <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                    <span class="title hover:text-blue-600 duration-150">Calendar</span>
                </a>
            </li>
            <li class="ml-6 my-6">
                <a href="index.php">
                    <span class="icon"><i class="fas fa-user"></i></span>
                    <span class="title hover:text-blue-600 duration-150">Profile</span>
                </a>
            </li>
            <li class="ml-6 my-6">
                <a href="index.php">
                    <span class="icon"><i class="fas fa-cog"></i></span>
                    <span class="title hover:text-blue-600 duration-150">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div>