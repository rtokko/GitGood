const { request, GraphQLClient } = require('graphql-request')
const fs = require ('fs')

async function main() {
  const endpoint = 'https://api.smash.gg/gql/alpha'

const graphQLClient = new GraphQLClient(endpoint, {
    headers: {
      Authorization: 'Bearer ac111b13f58a75b9210eb4db995f99cd',
    },
  })

  const query = /* GraphQL */ `
    query TournamentsByState($perPage: Int, $state: String!) {
  tournaments(query: {
    perPage: $perPage
    filter: {
      addrState: $state
    }
  }) {
    nodes {
      name
      startAt
      venueAddress
      
    }
  }
},
  `

  const variables = { 
  "state": "NJ",
  "perPage": 5 
}
	

  const data = await graphQLClient.request(query, variables)
	
  console.log(JSON.stringify(data, undefined, "\t"))

 
}

main().catch(error => console.error(error))
