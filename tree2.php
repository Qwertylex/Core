<?php
include "code.php";
include "code/tree2/logic.php";
$i=Input::_get();
$showHidden=($i->showHidden ?: $cnf["showHidden"]);
$node=new TreeNode(realpath($code['root']),$showHidden);
Output::add("tree",$node);
Output::send();