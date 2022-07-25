public static function all()
{
    $files = File::files(resource_path("path/"));
    return array_map(fn($file) $file->getContent(), $files);
}

public static function find($slug)
{
    if(!)
}