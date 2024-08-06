<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowbite Task Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-500">Flowbite</div>
            <div class="space-x-4">
                <span class="cursor-pointer">🔍</span>
                <span class="cursor-pointer">🔔</span>
                <span class="cursor-pointer">⋮</span>
                <span class="cursor-pointer">🌙</span>
                <span class="cursor-pointer">👤</span>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-8 max-w-2xl">
        <div id="taskList">
            <!-- Task cards will be dynamically added here -->
        </div>

        <button id="addTaskBtn" class="w-full py-4 bg-gray-100 border-2 border-dashed border-gray-300 rounded-lg text-gray-500 hover:bg-gray-200 transition-colors">
            + Add another card
        </button>
    </main>

    <script src="app.js"></script>
</body>
</html>

<script>
    const taskList = document.getElementById('taskList');
const addTaskBtn = document.getElementById('addTaskBtn');

// Sample task data
const tasks = [
    {
        title: 'Change charts javascript',
        description: 'div.i8v96MUIFwGv9qJUkAx7._Cj_M6 jt2ejDgkBBNgI.wekyMYEI8zByMSC gzHQ_W3VHmE2jAiCd1MN...',
        details: 'In _variables.scss on line 672 you define $table_variants. Each instance of "color-level" needs to be changed to "shift-color".',
        daysLeft: 5,
        assignees: 3
    },
    {
        title: 'Change homepage',
        description: 'Change homepage for Volt Dashboard.',
        image: 'https://via.placeholder.com/300x200',
        daysLeft: 22,
        assignees: 3
    },
    {
        title: 'Change charts javascript',
        description: 'In _variables.scss on line 672 you define $table_variants. Each instance of "color-level" needs to be changed to "shift-color".',
        daysLeft: 7,
        assignees: 3
    }
];

// Function to create a task card
function createTaskCard(task) {
    const card = document.createElement('div');
    card.className = 'bg-white rounded-lg shadow-md p-6 mb-6';

    card.innerHTML = `
        <h2 class="text-lg font-semibold text-gray-800 mb-2">${task.title}</h2>
        ${task.image ? `<img src="${task.image}" alt="${task.title}" class="w-full rounded-md mb-4">` : ''}
        <p class="text-gray-600 text-sm mb-4">${task.description}</p>
        ${task.details ? `<p class="text-gray-600 text-sm mb-4">${task.details}</p>` : ''}
        <div class="flex justify-between items-center">
            <div class="flex space-x-1">
                ${Array(task.assignees).fill('👤').join('')}
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">
                ${task.daysLeft} days left
            </span>
        </div>
    `;

    return card;
}

// Function to render all tasks
function renderTasks() {
    taskList.innerHTML = '';
    tasks.forEach(task => {
        taskList.appendChild(createTaskCard(task));
    });
}

// Add new task functionality
addTaskBtn.addEventListener('click', () => {
    const newTask = {
        title: 'New Task',
        description: 'Description for the new task',
        daysLeft: 14,
        assignees: 1
    };
    tasks.push(newTask);
    renderTasks();
});

// Initial render
renderTasks();
</script>
