<?php

function obtenerClasePrioridad($prioridad){
    $clasesTarea='';
    switch ($prioridad) {
        case 'alta':
            $clasesTarea .= ' priority-alta';
        break;
        case 'media':
            $clasesTarea .= ' priority-media';
        break;
        case 'baja':
            $clasesTarea .= ' priority-baja';
        break;
        
    }
    return $clasesTarea;
}

function renderizarTarea($tarea){
$clasePrioridad = 'task-item'. obtenerClasePrioridad($tarea['prioridad']);
    if($tarea['completado']){
        $clasePrioridad.=' completed';
    }
    return "<li class='$clasePrioridad'>{$tarea['titulo']}</li>";
}
?>