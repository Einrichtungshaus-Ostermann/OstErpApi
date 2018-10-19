<?php declare(strict_types=1);

use OstErpApi\Struct\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{

    public function testArticleMock()
    {
        $this->testArticleResourceWithParameter([]);
        $this->testArticleResourceWithParameter(['bla' => 'true']);
    }



    private function testArticleFields(Article $article, array $mockData)
    {
        foreach ($mockData as $name => $value) {
            switch ($name) {
                case 'COMPANY':
                    $this->assertEquals($article->getCompany(), $mockData[$name]);
                    break;
                case 'ARTICLE_NUMBER':
                    $this->assertEquals($article->getNumber(), $mockData[$name]);
                    break;
                case 'ARTICLE_NAME':
                    $this->assertEquals($article->getName(), $mockData[$name]);
                    break;
                case 'ARTICLE_WEIGHT':
                    $this->assertEquals($article->getWeight(), $mockData[$name]);
                    break;
            }
        }
    }



    private function testArticleResourceWithParameter(array $parameter)
    {
        $articleResource = Shopware()->Container()->get('ost_erp_api.api.resources.article');
        $articleMockGateway = Shopware()->Container()->get('ost_erp_api.api.gateway.mock.article');

        /** @var \OstErpApi\Struct\Article[] $articles */
        $articles = $articleResource->findBy($parameter);
        $articleMockData = $articleMockGateway->findBy($parameter);

        $this->assertEquals(count($articles), 1);

        foreach ($articles as $article) {
            $this->testArticleFields($article, $articleMockData);
        }
    }
}
