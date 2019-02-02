<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{route('home')}}</loc>
    </url>
    @foreach($categories as $category)
        <url>
            <loc>{{route('category.show', $category->slug)}}</loc>
            <lastmod>{{$category->updated_at->format('Y-m-d')}}</lastmod>
            <changefreq>weekly</changefreq>
        </url>
    @endforeach
</urlset>
