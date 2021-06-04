<?php
function getGallery() {
    return  array_splice(scandir('docs/'), 2);
}