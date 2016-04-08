
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
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_ehfaq._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-ehfaq table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-ehfaq table th {
        font-weight:bold;
    }

    .tx-ehfaq table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
