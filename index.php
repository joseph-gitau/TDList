<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="images/fav/favicon.ico" type="image/x-icon">
    <!-- tailwind css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- jquery -->
    <script src="js/jQuery-3.6.3.js"></script>
    <!-- custom js -->
    <script src="js/index.js"></script>
    <title>TDList</title>
</head>

<body>
    <!-- navigation -->

    <div class="container-m w-screen flex flex-row">
        <div class="w-1/4 min-h-screen bg-gray-200 border-r-2">
            <!-- include sidebar -->
            <?php include 'sidebar.php'; ?>
        </div>
        <div class="w-3/4 bg-gray-100 relative">
            <div class="nav h-24 w-full bg-gray-50 absolute shadow-md shadow-bottom">
                <div class="w-2/4 ">
                    <form class="items-center mt-6 ml-6">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>

                        </div>
                    </form>
                    <!-- nw -->
                    <div class="main-content mx-4 my-8 " id="main-content">
                        <!-- add new task button -->
                        <div class="add-task-btn">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"> Add new task <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- nw -->
            </div>

        </div>
    </div>
    </div>

</body>

</html>