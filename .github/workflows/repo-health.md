---
on:
  push: {}
  workflow_dispatch: {}

# Sirf READ permissions deni hain. 
# WRITE permission AI ko 'safe-outputs' se apne aap mil jayegi.
permissions:
  contents: read
  issues: read
  pull-requests: read
  deployments: read

safe-outputs:
  create-issue:
    title-prefix: "[AI-Report] "

engine: copilot
---

# Repository Health Report Agent

You are a repository assistant. Analyze the repository and create a report.

## Task 1: PRs Moved
Identify pull requests that changed state (Open to Merged/Closed) in the last 24 hours.

## Task 2: Abandoned PRs
Identify open PRs with no updates for more than 1 day.

## Task 3: Abandoned Branches
Identify branches (not main/master) with no commits for more than 2 days.

## Task 4: PR Count
Calculate the number of PRs raised by each developer in the last 7 days.

## Task 5: Environments
Identify which branch is deployed in Dev, QA, and UAT using the deployments API.

## Final Action
Create a new GitHub Issue with these findings in a clean table format.