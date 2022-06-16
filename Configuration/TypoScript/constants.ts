
plugin.tx_svbsvwtabelle_viewtabelle {
  view {
    # cat=plugin.tx_svbsvwtabelle_viewtabelle/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:svb_svwtabelle/Resources/Private/Templates/
    # cat=plugin.tx_svbsvwtabelle_viewtabelle/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:svb_svwtabelle/Resources/Private/Partials/
    # cat=plugin.tx_svbsvwtabelle_viewtabelle/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:svb_svwtabelle/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_svbsvwtabelle_viewtabelle//a; type=string; label=Default storage PID
    storagePid =
  }
}
