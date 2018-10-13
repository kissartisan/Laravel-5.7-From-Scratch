<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a new project</title>
</head>
<body>
    <h1>Create a Project</h1>
    <form action="/projects" method="POST">
        @csrf
        <div>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="Create Project">
        </div>
    </form>

</body>
</html>
