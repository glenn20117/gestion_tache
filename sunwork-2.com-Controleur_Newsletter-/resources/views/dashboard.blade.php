<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
* {
  margin: 0; padding: 0; box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  display: flex;
  min-height: 100vh;
  background: #fff;
  color: #010101;
}

/* Sidebar */

aside {
  width: 250px;
  background: #d7d7d7;
  display: flex;
  flex-direction: column;
  padding: 20px;
}
aside h2 { font-size: 20px; margin-bottom: 20px; }
aside nav ul { list-style: none; }
aside nav li { margin-bottom: 10px; }
aside nav a {
  text-decoration: none; color: #010101;
  padding: 8px 12px; display: block; border-radius: 6px;
}
aside nav a:hover { background: #b8b8b8ff; }

/* Main */

main { flex: 1; margin-left: 250px; padding: 20px; }
.header {
  display: flex; justify-content: space-between; align-items: center;
  margin-bottom: 20px;
}
.logout-btn {
  background: #000; color: #fff; border: none;
  padding: 8px 16px; border-radius: 6px; cursor: pointer;
}
.logout-btn:hover { background: #fff; color: #000; }

/* Board */

.board {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  padding: 10px 0;
}

.list {
  width: 100%;
  background: #f5f5f5;
  border-radius: 12px;
  padding: 10px;
  margin-bottom: 20px;
}

.list h3 {
  display: flex; justify-content: space-between; align-items: center;
  margin-bottom: 15px; font-size: 18px;
}

/* Colonnes */

.column {
  min-height: 200px;
  padding: 10px;
  border-radius: 10px;
  margin-bottom: 10px;
}
.column h4 { margin-bottom: 10px; }

.column[data-status="todo"] { background: #4a4a4aff; }
.column[data-status="in_progress"] { background: #3a3a3aff; }
.column[data-status="done"] { background: #2a2a2aff; }

/* Card */

.card {
  background: #fff;
  color: #333;
  padding: 15px;
  margin-bottom: 10px;
  border-radius: 8px;
  cursor: grab;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
.card.dragging { opacity: 0.5; }

/* Form */

.form {
  margin: 10px 0; padding: 10px;
  background: #403e3e; border-radius: 8px;
  color: #fff;
}
.form input, .form textarea, .form select {
  width: 100%; padding: 6px 10px;
  margin: 6px 0 12px; border-radius: 4px; border: none;
}
button {
  cursor: pointer; padding: 8px 12px;
  border-radius: 6px; border: none;
}
.show-task-form-btn {
  background: #333; color: #fff;
  margin-top: 5px; width: 100%;
}
.show-task-form-btn:hover { background: #555; }
</style>
</head>

<body>

<aside>
  <h2>Dashboard</h2>
  <nav>
    <ul>
      <li><a href="{{ route('dashboard') }}">Accueil</a></li>
      <li><a href="{{ route('dashboard') }}">Projets et Tâches</a></li>
    </ul>
  </nav>
</aside>

<main>
  <div class="header">
    <h1>Projets et Tâches</h1>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="logout-btn">Se Déconnecter</button>
    </form>
  </div>

  <!-- Création d'un projet -->
  <div class="text-center">
    <button type="button" id="show-form-btn">➕ Créer un projet</button>
  </div>

  <div class="form" id="project-form" style="display:none;">
    <form action="{{ route('project_s') }}" method="post">
      @csrf
      <label>Nom *</label>
      <input type="text" name="name" required>
      <label>Description</label>
      <textarea name="description"></textarea>
      <div class="text-center">
        <button type="submit">Créer le projet</button>
      </div>
    </form>
  </div>

  @if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
  @endif

  <div class="board">
    @foreach($projects as $project)
      <div class="list" data-project="{{ $project->id }}">
        <h3>
          {{ $project->name }}
          <form action="{{ route('p_destroy', $project->id) }}" method="POST" onsubmit="return confirm('Supprimer ce projet ?');">
            @csrf @method('DELETE')
            <button type="submit">Supprimer</button>
          </form>
        </h3>

        <!--  À faire -->
        <div class="column" data-status="todo">
          <h4>À faire</h4>
          @foreach($project->tasks->where('status', 'todo') as $task)
            <div class="card" draggable="true" data-task="{{ $task->id }}">
              <strong>{{ $task->name }}</strong><br>
              {{ $task->description }}
            </div>
          @endforeach
        </div>

        <!-- En cours -->
        <div class="column" data-status="in_progress">
          <h4>En cours</h4>
          @foreach($project->tasks->where('status', 'in_progress') as $task)
            <div class="card" draggable="true" data-task="{{ $task->id }}">
              <strong>{{ $task->name }}</strong><br>
              {{ $task->description }}
            </div>
          @endforeach
        </div>

        <!--Terminé -->
        <div class="column" data-status="done">
          <h4>Terminé</h4>
          @foreach($project->tasks->where('status', 'done') as $task)
            <div class="card" draggable="true" data-task="{{ $task->id }}">
              <strong>{{ $task->name }}</strong><br>
              {{ $task->description }}
            </div>
          @endforeach
        </div>

        <!-- Bouton ajouter une tâche -->
        <button type="button" class="show-task-form-btn" data-project="{{ $project->id }}">➕ Ajouter une tâche</button>
        <div class="form task-form" id="task-form-{{ $project->id }}" style="display:none;">
          <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <input type="hidden" name="project_id" value="{{ $project->id }}">
            <label>Nom de la tâche *</label>
            <input type="text" name="name" required>
            <label>Description</label>
            <textarea name="description"></textarea>
            <label>Status</label>
            <select name="status">
              <option value="todo">À faire</option>
              <option value="in_progress">En cours</option>
              <option value="done">Terminé</option>
            </select>
            <button type="submit">Créer la tâche</button>
          </form>
        </div>
      </div>
    @endforeach
  </div>
</main>

<script>
// Formulaire projet
document.getElementById('show-form-btn').addEventListener('click', () => {
  const form = document.getElementById('project-form');
  form.style.display = form.style.display === 'none' ? 'block' : 'none';
});

// Formulaire tâche
document.querySelectorAll('.show-task-form-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const projectId = btn.getAttribute('data-project');
    const form = document.getElementById('task-form-' + projectId);
    form.style.display = form.style.display === 'none' ? 'block' : 'none';
  });
});

// Drag et Drop
let draggedCard = null;

document.querySelectorAll('.card').forEach(card => {
  card.addEventListener('dragstart', () => {
    draggedCard = card;
    card.classList.add('dragging');
  });
  card.addEventListener('dragend', () => {
    card.classList.remove('dragging');
    draggedCard = null;
  });
});

document.querySelectorAll('.column').forEach(col => {
  col.addEventListener('dragover', e => {
    e.preventDefault();
  });

  col.addEventListener('drop', e => {
    e.preventDefault();
    if (draggedCard) {
      col.appendChild(draggedCard);

      const taskId = draggedCard.dataset.task;
      const newStatus = col.dataset.status;

      // Requête AJAX qui permet de garder la sauvegarde quand on modifie

      fetch(`/tasks/${taskId}/update-status`, {
        method: "PATCH",
        headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ status: newStatus })
      });
    }
  });
});
</script>
</body>
</html>
