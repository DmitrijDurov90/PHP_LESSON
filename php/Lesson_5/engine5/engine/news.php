<?php
function getNews() {
    return getAssocResult("SELECT * FROM news");
}

function getOneNews($id) {
    return getOneResult("SELECT * FROM news WHERE id = {$id}");
}