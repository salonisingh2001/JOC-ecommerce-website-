---
on:
  push: {}
  workflow_dispatch: {}

permissions:
  contents: read
  issues: read
  pull-requests: read
  deployments: read

safe-outputs:
  create-issue:
    title-prefix: "[AI-Report] "

with:
  model: "gpt-4o"

engine: copilot
---
# Repository Health Report Agent

You are a repository assistant.

## Task 1: Basic Health Check
Identify all open pull requests and list the names of all branches. 

## Final Action
Create a new GitHub Issue with these findings.