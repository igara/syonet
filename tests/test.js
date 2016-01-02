describe('[docs] dock_list画面', function() {
  it('タイトルがdock_list!', function() {
    browser.get('http://localhost:8000/docs/screen/docs_list/design/design_success.html');

    expect(browser.getTitle()).toEqual('docs_list');
    // ここでストップ
    browser.pause(); 
  });
});