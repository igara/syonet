<?php

use App\Http\Services\Docs\MarkdownService;

/**
 * MarkdownServiceクラスのgetHtmlFromMarkdownのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class MarkdownServiceGetHtmlFromMarkdownTest extends TestCase
{
    /**
     * getHtmlFromMarkdownに
     * paramがない時、
     * FALSEになることを確認する.
     */
    public function testGetHtmlFromMarkdownWhenIsNotParam()
    {
        $markdownService = new MarkdownService();
        $getHtml = $markdownService->getHtmlFromMarkdown('');
        // 失敗時はエラーメッセージが表示される
        $this->assertFalse(
            $getHtml,
            'error:paramが無い場合にFALSEになっていない'
        );
    }
}
