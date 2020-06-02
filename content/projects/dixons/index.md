---
title: "Dixons Carphone"
date: 2019-06-03T21:51:13+01:00
draft: false
hideLastModified: true
keepImageRatio: true
tags: ["PHP", "Symfony", "Terraform", "AWS", "Docker", "Elasticsearch"]
summary: "Improving the Curry's Search Api"
summaryImage: "images/currys.png" 
showInMenu: false
---

{{< summaryImage >}}

## Key Technologies:
{{< tags >}}

## Company Intro:

[Dixons Carphone](https://www.dixonscarphone.com/en) is the company behind the [Curry's website](https://www.currys.co.uk/gbuk/index.html).

## Project Details:

I was embedded in the search labs team and involved in creating additionally functionality for the search api. 

I was asked to create a solution on how to ensure that changes to the search algorithm did not negatively impact on relevancy results and I came up with a tool to measure changes to relivancy using the wilcoxon signed-rank test using the top 1000 searches with the ability to drill into search and see how the results changed. 

Another notable project was to ensure that api performance did not decrease with new releases. I established a baseline performance and added testing of the peformance into the CI pipeline to fail the build if it did decrease.

Other projects included migrating to docker compose, minor tweaks to the search results, minor additions to the backoffice, & adding OpenDistro elasticsearch monitors.

## Team Composition & My Role:

The searchlabs team consisted of 3 additional senior developers, 1 qa, 1 product manager, & 1 team lead (part-time). My role was as a senior developer contractor and used my expertise to suggest and make improvements to the search api.
