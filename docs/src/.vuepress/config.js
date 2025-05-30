const { description } = require('../../package')

module.exports = {
  /**
   * Ref：https://v1.vuepress.vuejs.org/config/#title
   */
  title: 'Sportmonks Football Api',
  /**
   * Ref：https://v1.vuepress.vuejs.org/config/#description
   */
  description: description,

  /**
   * Extra tags to be injected to the page HTML `<head>`
   *
   * ref：https://v1.vuepress.vuejs.org/config/#head
   */
  head: [
    ['meta', { name: 'theme-color', content: '#3eaf7c' }],
    ['meta', { name: 'apple-mobile-web-app-capable', content: 'yes' }],
    ['meta', { name: 'apple-mobile-web-app-status-bar-style', content: 'black' }],
    ['meta', { name: 'description', content: description }],
    ['meta', { property: 'og:title', content: 'Sportmonks Football Api' }],
    ['meta', { property: 'og:type', content: 'website' }],
    ['meta', { property: 'og:description', content: description }],
    [
      'script',
      {
          async: true,
          src: 'https://www.googletagmanager.com/gtag/js?id=G-JMSRK2Y62C',
      },
    ],
    [
      'script',
      {},
      [
          "window.dataLayer = window.dataLayer || [];\nfunction gtag(){dataLayer.push(arguments);}\ngtag('js', new Date());\ngtag('config', 'G-JMSRK2Y62C');",
      ],
    ],
  ],

  /**
   * Theme configuration, here is the default theme configuration for VuePress.
   *
   * ref：https://v1.vuepress.vuejs.org/theme/default-theme-config.html
   */
  themeConfig: {
    repo: 'https://github.com/PyaeSoneAungRgn/sportmonks-football-api',
    editLinks: false,
    docsDir: 'docs',
    editLinkText: '',
    lastUpdated: false,
    nav: [
    ],
    sidebar: {
      '/': [
        {
          title: 'Installation',
          collapsable: false,
          children: [
            '',
          ]
        },
          {
              title: 'Response Dto',
              collapsable: false,
              children: [
                  'response-dto',
              ]
          },
        {
          title: 'Request options',
          collapsable: false,
          children: [
            'filtering',
            'selecting-and-filtering',
            'selecting-fields',
            'pagination',
            'ordering',
            'with-queries',
          ]
        },
        {
          title: 'Core',
          collapsable: false,
          children: [
            'continents',
            'countries',
            'regions',
            'cities',
            'types',
          ]
        },
        {
          title: 'Endpoints',
          collapsable: false,
          children: [
            'livescores',
            'fixtures',
            'states',
            'leagues',
            'seasons',
            'schedules',
            'stages',
            'rounds',
            'standings',
            'topscorers',
            'teams',
            'team-squads',
            'players',
            'coaches',
            'referees',
            'transfers',
            'venues',
            'tv-stations',
            'predictions',
            'pre-match-odds',
            'inplay-odds',
            'markets',
            'bookmakers',
            'news',
            'rivals',
            'commentaries'
          ]
        }
      ],
    }
  },

  /**
   * Apply plugins，ref：https://v1.vuepress.vuejs.org/zh/plugin/
   */
  plugins: [
    '@vuepress/plugin-back-to-top',
    '@vuepress/plugin-medium-zoom',
  ]
}
