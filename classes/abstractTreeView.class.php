<?php
 
 abstract class abstractTreeView {
        abstract public function showCompleteTree();	 
		abstract public function showAjaxTree();
		abstract public function fetchAjaxTreeNode($entry_id);
}