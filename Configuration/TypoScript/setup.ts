
plugin.tx_svbsvwtabelle_viewtabelle {
  view {
    templateRootPaths.0 = EXT:svb_svwtabelle/Resources/Private/Templates/
    templateRootPaths.1 = plugin.tx_svbsvwtabelle_viewtabelle.view.templateRootPath
    partialRootPaths.0 = EXT:svb_svwtabelle/Resources/Private/Partials/
    partialRootPaths.1 = plugin.tx_svbsvwtabelle_viewtabelle.view.partialRootPath
    layoutRootPaths.0 = EXT:svb_svwtabelle/Resources/Private/Layouts/
    layoutRootPaths.1 = plugin.tx_svbsvwtabelle_viewtabelle.view.layoutRootPath
  }
  persistence {
    storagePid = plugin.tx_svbsvwtabelle_viewtabelle.persistence.storagePid
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_svbsvwtabelle._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-svb-svwtabelle table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-svb-svwtabelle table th {
        font-weight:bold;
    }

    .tx-svb-svwtabelle table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
