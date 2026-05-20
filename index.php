<?php
/**
 * 站群系统 - 前端路由入口
 */

require_once __DIR__ . '/functions.php';

// 获取请求路径
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$requestUri = parse_url($requestUri, PHP_URL_PATH);
$requestUri = '/' . trim($requestUri, '/');

// 首页：/ 或 /index.php
if ($requestUri === '/' || $requestUri === '/index.php') {
    $site = getSiteConfig();
    $categories = getCategories();
    $data = getHomePageArticles();

    $title = getPageTitle($site);
    $keywords = getPageKeywords($site);
    $description = getPageDescription($site);

    include __DIR__ . '/templates/header.php';
    include __DIR__ . '/templates/home.php';
    include __DIR__ . '/templates/footer.php';
    exit;
}

// 解析路径: /category-alias/ 或 /category-alias/article-alias.html
$parts = explode('/', trim($requestUri, '/'));
$suffix = getSetting('article_suffix');
$site = getSiteConfig();
$categories = getCategories();

// 栏目页：/category-alias/ 或 /category-alias
if (count($parts) === 1 && $parts[0] !== '') {
    $catAlias = $parts[0];
    $category = getCategoryByAlias($catAlias);

    if ($category) {
        $data = getCategoryPageArticles($catAlias);

        $title = getPageTitle($site, $category['name']);
        $keywords = getPageKeywords($site, $category);
        $description = getPageDescription($site);

        include __DIR__ . '/templates/header.php';
        include __DIR__ . '/templates/category.php';
        include __DIR__ . '/templates/footer.php';
        exit;
    }
}

// 文章内页：/category-alias/article-alias.html
if (count($parts) === 2 && $parts[0] !== '' && $parts[1] !== '') {
    $catAlias = $parts[0];
    $articlePart = $parts[1];

    // 去掉后缀
    $articleAlias = $articlePart;
    if (!empty($suffix) && str_ends_with($articlePart, $suffix)) {
        $articleAlias = substr($articlePart, 0, -strlen($suffix));
    }

    $data = getArticlePageData($catAlias, $articleAlias);

    if ($data !== null) {
        $title = getPageTitle($site, $data['category']['name'], $data['article']['title']);
        $keywords = getPageKeywords($site, $data['category']);
        $description = getPageDescription($site, $data['article']['title'] . '：' . $data['summary']);
        $articleData = $data;

        include __DIR__ . '/templates/header.php';
        include __DIR__ . '/templates/article.php';
        include __DIR__ . '/templates/footer.php';
        exit;
    }
}

// 404
http_response_code(404);
$title = '404 - ' . h($site['title']);
$keywords = h($site['keywords']);
$description = h($site['description']);
include __DIR__ . '/templates/header.php';
echo '<div style="text-align:center;padding:80px 20px;"><h2>404 - 页面不存在</h2><p><a href="/">返回首页</a></p></div>';
include __DIR__ . '/templates/footer.php';
