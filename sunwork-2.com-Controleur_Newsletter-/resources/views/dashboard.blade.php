<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
    <style>
        body { 
            font-family: Arial; background: #c2c2c2; color: #e7d535; padding: 2rem; display: flex; flex-direction: column; align-items: center; 
        }
        
        h1 { 
            color: #fff; margin-bottom: 2rem; 
        }
        
        form, table { 
            background: #222; padding: 2rem; border-radius: 6px; width: 100%; max-width: 600px; color: #e7d535; margin-bottom: 2rem; 
        }
        
        input, textarea {
             width: 100%; padding: 0.5rem; margin-bottom: 1rem; border-radius: 4px; border: none; 
            }
        
        button { 
            background: #e7d535; border: none; padding: 0.75rem 1.5rem; cursor: pointer; border-radius: 5px; font-weight: bold; 
        }
        
        table { 
            border-collapse: collapse; color: #e7d535; margin-top: 1rem; 
        }
        
        th, td { 
            padding: 12px 15px; border-bottom: 1px solid #444; text-align: left; 
        }
        
        th { 
            background: #333;
         }
        
        tbody tr:hover { 
            background: #010101;
         }
         
    </style>
</head>
<body>

<h1>Bienvenue, {{ auth()->user()->name }} !</h1>

<div class="text-center">
    <button type="button" id="show-form-btn">➕ Créer un projet</button>
</div>

<div class="form" id="project-form" style="display: none; margin-top: 20px;">
    <form action="{{ route('project_s') }}" method="post" role="form">
        @csrf
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label>Nom du projet *</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom du projet" data-rule="minlen:4" data-msg="Veuillez entrer au moins 4 caractères" required />
                <div class="validation"></div>
            </div>
            <div class="form-group col-lg-6">
                <label>Statut</label>
                <input type="text" class="form-control" id="status" name="status" placeholder="Statut" />
                <div class="validation"></div>
            </div>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" rows="5" placeholder="Description"></textarea>
            <div class="validation"></div>
        </div>

        <div class="form-row">
            <div class="form-group col-lg-6">
                <label>Date début</label>
                <input type="date" class="form-control" name="start_date" />
                <div class="validation"></div>
            </div>
            <div class="form-group col-lg-6">
                <label>Date fin</label>
                <input type="date" class="form-control" name="end_date" />
                <div class="validation"></div>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" title="Créer le projet">Créer le projet</button>
        </div>
    </form>
</div>

<script>
document.getElementById('show-form-btn').addEventListener('click', function() {
    const form = document.getElementById('project-form');
    form.style.display = (form.style.display === 'none') ? 'block' : 'none';
});
</script>


@if(session('success'))
    <p style="color: #0f0">{{ session('success') }}</p>
@endif

@if($projects->isEmpty())
    <p>Aucun projet pour le moment.</p>
@else
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Statut</th>
            <th>Date début</th>
            <th>Date fin</th>
            <th>Actions</th> 
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->name }}</td>
            <td>{{ $project->description }}</td>
            <td>{{ $project->status }}</td>
            <td>{{ $project->start_date }}</td>
            <td>{{ $project->end_date }}</td>
            <td>
             <form action="{{ route('p_destroy', $project->id) }}" method="POST" 
                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?');" 
                style="display: inline; margin: 0; padding: 0; background: none; border: none;">
                @csrf
                @method('DELETE')
                <button type="submit" 
                    style="background: red; color: #fff; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer;">
                 Supprimer
                </button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endif

</body>
</html>
