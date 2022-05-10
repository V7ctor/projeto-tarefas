<?php
    require_once("vendor/autoload.php");
    require_once("Utils.php");
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    setLocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
    use Dist\Model\Employee;
    use Dist\Model\Task;
    use Slim\Slim;
    use Dist\Page;
    
    $app = new Slim;
    
    $app->config("debug", true);

    $app->get("/", function() {
        $search = (isset($_GET['search'])) ? $_GET['search'] : "";
        $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
    
        $tasks = Task::searchPage($search, $page);

        $page = new Page();
       
        $page->setTpl("index", [
            "taskslist"=>$tasks['tasks'],
            "search"=>$search,
            "pages"=>$tasks["pages"],
        ]);
    });

    $app->get("/:idtask/excluir", function($idtask) {
        $task = new Task;
        $task->getById($idtask);
        $task->delete();
        header("Location: /");
        exit;
    });

    $app->get("/novatarefa", function() {
        $page = new Page;

        $page->setTpl("task-register",[
            "employeeslist"=>Employee::listAll()
        ]);
    });

    $app->post("/novatarefa", function() {
        $task = new Task;

        
        $task->setData($_POST);

        $task->save();
        header("Location: /");
        exit;
    });

    $app->get("/areacolaboradores", function() {
        $search = (isset($_GET['search'])) ? $_GET['search'] : "";
        $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
    
        $employeelist = Employee::searchPage($search, $page);

        $page = new Page;

        $page->setTpl("employee-area", [
            "employeeslist"=>$employeelist['employee'],
            "search"=>$search,
            "pages"=>$employeelist["pages"],
        ]);
    });

    $app->get("/areacolaboradores/novocolaborador", function() {
        $page = new Page;

        $page->setTpl("employee-register");
    });

    $app->post("/areacolaboradores/novocolaborador", function() {
        $employee = new Employee;

        $employee->setData($_POST);

        $employee->save();

        header("Location: /areacolaboradores");
        exit;
    });

    $app->get("/areacolaboradores/:idcolaborador/editarcolaborador", function($idcolaborador) {
        $employee = new Employee;

        $employee->getById($idcolaborador);

        $page = new Page;

        $page->setTpl("employee-update", [
            "employee"=>$employee->getValues()
        ]);
    });

    $app->post("/areacolaboradores/:idcolaborador/editarcolaborador", function($idcolaborador) {
        $employee = new Employee;

        $employee->getById($idcolaborador);
        $employee->setData($_POST);
        $employee->update();
    
        header("Location: /areacolaboradores");
        exit;
    });

    $app->get("/areacolaboradores/:idcolaborador/excluir", function($idcolaborador) {
        $employee = new Employee;

        $employee->getById($idcolaborador);

        $employee->delete();

        header("Location: /areacolaboradores");
        exit;
    });

    $app->run();
