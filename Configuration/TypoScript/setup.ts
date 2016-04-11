
plugin.tx_ehfaq_faq {
  view {
    templateRootPaths.0 = EXT:ehfaq/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_ehfaq_faq.view.templateRootPath}
    partialRootPaths.0 = EXT:ehfaq/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_ehfaq_faq.view.partialRootPath}
    layoutRootPaths.0 = EXT:ehfaq/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_ehfaq_faq.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_ehfaq_faq.persistence.storagePid}
    recursive = 1
  }
  settings.images {
    maxWidth = {$plugin.tx_ehfaq_faq.settings.images.maxWidth}
    maxHeight = {$plugin.tx_ehfaq_faq.settings.images.maxHeight}
  }
}
plugin.tx_ehfaq_faq.persistence.storagePid >

page.includeJSFooter.ehfaq = typo3conf/ext/ehfaq/Resources/Public/JavaScript/main.js

